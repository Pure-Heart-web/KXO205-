// formValidation.js

// 获取表单和表单元素
const volunteerForm = document.getElementById('volunteerForm');

// 表单提交事件
volunteerForm.addEventListener('submit', function (event) {
    // 阻止表单的默认提交行为
    event.preventDefault();

    // 获取表单字段的值
    const name = document.getElementById('name').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const eventSelect = document.getElementById('event').value;
    const timeslot = document.getElementById('timeslot').value;

    // 验证每个字段
    if (name === '') {
        alert('请填写您的姓名');
        return;
    }

    if (contact === '' || !validateEmail(contact)) {
        alert('请填写有效的联系方式');
        return;
    }

    if (eventSelect === '') {
        alert('请选择一个活动');
        return;
    }

    if (timeslot === '') {
        alert('请选择一个时间段');
        return;
    }

    // 如果所有字段验证通过，可以提交表单
    alert('报名成功！感谢您的参与');
    volunteerForm.submit(); // 这里你可以将表单提交到服务器（在作业1中模拟即可）
});

// 邮箱格式验证
function validateEmail(email) {
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);
}
