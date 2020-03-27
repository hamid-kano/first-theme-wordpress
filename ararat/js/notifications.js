if ('serviceWorker' in navigator) {
    // Register a Service Worker
    navigator.serviceWorker.register('/assets/js/sw.js?1').then(function (reg) {
        // console.log('Service Worker Registered!', reg);

        reg.pushManager.getSubscription().then(function (sub) {
            if (sub === null) {
                $('header .notification-icon').removeClass('active');
            } else {
                $('header .notification-icon').addClass('active');
            }
        });
    })
        .catch(function (err) {
            // console.log('Service Worker registration failed: ', err);
        });

    function urlBase64ToUint8Array(base64String) {
        const padding = '='.repeat((4 - base64String.length % 4) % 4);
        const base64 = (base64String + padding)
            .replace(/\-/g, '+')
            .replace(/_/g, '/');

        const rawData = window.atob(base64);
        const outputArray = new Uint8Array(rawData.length);

        for (var i = 0; i < rawData.length; ++i) {
            outputArray[i] = rawData.charCodeAt(i);
        }
        return outputArray;
    }

    const vapidPublicKey = 'BJxPLavZgKLfEccVUkfM0Rq8HqAqF8Nrlmf7xrqVqcZCneiwhL4bUZ3F_RcGRCoO8ULGi_5PRrvehcs3SwPSXog';
    const convertedVapidKey = urlBase64ToUint8Array(vapidPublicKey);

    function notificationsSubscribe(channel_id) {
        return new Promise(function (resolve, reject) {
            const permissionResult = Notification.requestPermission(function (result) {
                resolve(result);
            });

            if (permissionResult) {
                permissionResult.then(resolve, reject);
            }
        })
            .then(function (permissionResult) {
                if (permissionResult !== 'granted') {
                    throw new Error('We weren\'t granted permission.');
                }
                else {
                    subscribeUserToPush(channel_id);
                }
            });
    }

    function subscribeUserToPush(channel_id) {
        return navigator.serviceWorker.register('/assets/js/sw.js?1')
            .then(function (registration) {
                const subscribeOptions = {
                    userVisibleOnly: true,
                    applicationServerKey: convertedVapidKey
                };
                return registration.pushManager.subscribe(subscribeOptions);
            })
            .then(function (pushSubscription) {
                // console.log('Received PushSubscription: ', JSON.stringify(pushSubscription));
                var pushToken = JSON.stringify(pushSubscription);
                $.ajax({
                    method: "POST",
                    url: "/cmsapi/channels.php",
                    data: { action: "register", pushSignature: pushToken, clientOS: 'Web', clientOSVersion: navigator.sayswho, channelId: channel_id },
                    dataType: 'json'
                });
                $('header .notification-icon').addClass('active');
                return pushSubscription;
            });
    }

    function unsubscribeUser(channel_id) {
        navigator.serviceWorker.register('/assets/js/sw.js?1').then(function (reg) {
            reg.pushManager.getSubscription().then(function (subscription) {
                if (subscription) {
                    // console.log('Unsubscribed', subscription.endpoint);
                    var pushToken = JSON.stringify(subscription);
                    $.ajax({
                        method: "POST",
                        url: "/cmsapi/channels.php",
                        data: { action: "unregister", pushSignature: pushToken, clientOS: 'Web', clientOSVersion: navigator.sayswho, channelId: channel_id },
                        dataType: 'json'
                    });
                    $('header .notification-icon').removeClass('active');
                    return subscription.unsubscribe();
                }
            })
                .catch(function (error) {
                    // console.log('Error unsubscribing', error);
                });
        })
    }

    // Detect browser and version
    navigator.sayswho = (function () {
        var ua = navigator.userAgent, tem,
            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return 'IE ' + (tem[1] || '');
        }
        if (M[1] === 'Chrome') {
            tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
            if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
        return M.join(' ');
    })();
}