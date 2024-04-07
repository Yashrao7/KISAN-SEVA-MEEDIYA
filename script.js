
function increaseLikes() {
    var likesElement = this.parentElement.querySelector('.likes');
    var currentLikes = parseInt(likesElement.innerText);
    likesElement.innerText = currentLikes + 1;
}

// open the comment box modal
function openCommentBox() {
    var modal = document.getElementById('comment-modal');
    modal.style.display = "block";
}

//comment box modal
function closeCommentBox() {
    var modal = document.getElementById('comment-modal');
    modal.style.display = "none";
}

//submit comment
function submitComment() {
    var commentTextarea = document.getElementById('comment-textarea');
    var comment = commentTextarea.value;
    console.log("Comment submitted:", comment);
    commentTextarea.value = '';
    closeCommentBox();
}

// Attach click event listeners to all like buttons
var likeButtons = document.querySelectorAll('.like-btn');
likeButtons.forEach(function(button) {
    button.addEventListener('click', increaseLikes);
});

// Attach click event listener to all comment buttons
var commentButtons = document.querySelectorAll('.comment-btn');
commentButtons.forEach(function(button) {
    button.addEventListener('click', openCommentBox);
});
