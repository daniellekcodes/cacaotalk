
const homeform = document.querySelector('#formy');

function scroll() {
    const sender = document.querySelector('.sender:last-of-type');
    
    sender.scrollIntoView({ behavior: "smooth"});

}

homeform.addEventListener('submit', (e) => {
    
    e.preventDefault();
    
    const xhr = new XMLHttpRequest();
    
    xhr.open("POST", "insertMessageAjax.php");
    const user = document.querySelector('#username');
    var username = user.value;
    
    const message= document.querySelector('#msg');
    var msg = message.value;

    var form = new FormData();
    
    form.append('username', username);
    form.append('msg', msg);

    xhr.addEventListener('load', (e) => {
        const response = xhr.response;

        const chatbox = document.querySelector('#chatbox');
        
        chatbox.innerHTML += response;
        scroll();
    });
    
    xhr.send(form);
});

