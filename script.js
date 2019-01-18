function testFunction() {
    var date = new Date();
    var str = "UTC: " + date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    document.write(str);
    alert(str);
}