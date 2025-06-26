function sendMail(){
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value,
    }

    emailjs.send("service_ssovfbj","template_2bn0cv7", parms).then(alert("E-mail envoyé avec succès !"))
}