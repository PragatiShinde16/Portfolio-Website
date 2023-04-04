function sendemail(){
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "pragatishinde491@gmail.com",
        Password : "8C90907337521138BC1975BD7F2680818DFC",
        To : 'pragatishinde491@gmail.com',
        From : "shivanishinde564@gmail.com",
        // document.getElementById("idname").value
        Subject : "This is the subject",
        Body : "hello i am user"
        // Body : "Name :"+document.getElementById('idname').value,
    }).then(
      message => alert(message)
    );
}
