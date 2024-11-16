// main.js
// 模拟捐赠按钮点击
const donateButton = document.querySelector('.btn-donate');
if (donateButton) {
    donateButton.addEventListener('click', function () {
        alert('感谢您的捐赠！目前我们没有集成支付功能，这只是一个模拟。');
    });
}
// 初始化页面时，确保导航栏项高亮显示（根据当前页面）
document.addEventListener('DOMContentLoaded', function () {
    const currentPage = window.location.pathname;
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        if (link.href.includes(currentPage)) {
            link.classList.add('active');  // 给当前页面的链接添加高亮样式
        }
    });
});

// 其他交互功能，比如滚动到页面顶部
const scrollToTopButton = document.createElement('button');
scrollToTopButton.textContent = '回到顶部';
scrollToTopButton.classList.add('scroll-to-top');
document.body.appendChild(scrollToTopButton);

scrollToTopButton.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// 在页面滚动时显示“回到顶部”按钮
window.addEventListener('scroll', function () {
    if (window.scrollY > 500) {
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
});
