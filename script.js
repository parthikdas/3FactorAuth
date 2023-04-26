// document.getElementById('submit').addEventListener('click', () => {
//     let email = document.getElementById('email')
//     let pass = document.getElementById('password')
//     if(email.value && pass.value) {
//         let rand = Math.floor(Math.random() * 100 + 1); // generating verification code range 1 - 100
//         let params = {
//             email: email,
//             message: "The confirmation code is " + rand
//         }
//         const serviceId = "";
//         const templateId = "";

//         emailjs
//         .send(serviceId, templateId, params)
//         .then((res)=>{
//             alert('done')
//         })
//         .catch((err)=> console.log(err))
//     }
// })
email = ''
document.getElementById('submit').addEventListener('click',() => {
    email = document.getElementById('email').value
})
// lalalalu69420@gmail.com
// tanish@69420