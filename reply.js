var replyButton = document.querySelector('#user_id');
var replyPost = document.querySelector('.replypost');

replyButton.addEventListener('click', doSomething, false);

function doSomething(e) {
    if (replyPost.style.display == '' || replyPost.style.display == 'none') {
        replyPost.style.display = 'block';
    } else {
        replyPost.style.display = 'none';
    }
}
