//字符串反转、leetcode.557
export default (str) => {
    return str.split(' ').map(item => {
        return item.split('').reverse().join('');
    }).join(' ');
}