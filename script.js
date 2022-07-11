// let mahasiswa = {
//     nama    : "sandika",
//     nrp     : "010101010",
//     email   : "sandika@gmail.com"
// }

// // console.log(mahasiswa);
// //mengubah objek ke json
// console.log(JSON.stringify(mahasiswa));

//JSON ke objek
let xhr = new XMLHttpRequest();
xhr.onreadystatechange =function(){
    if(xhr.readyState == 4 && xhr.status==200){
        let mahasiswa = JSON.parse(this.responseText);
        console.log(mahasiswa); 
    }
}

xhr.open('GET', 'baru.json' , true);
xhr.send();