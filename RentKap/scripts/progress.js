const progress = document.getElementById('progress_bar');
window.addEventListener('scroll', progress_change);
function progress_change(argument) {
	let	windowScr = document.body.scrollTop || document.documentElement.scrollTop;
    let windowH = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let wid = windowScr / windowH * 100;
    progress.style.width = wid + '%';
}