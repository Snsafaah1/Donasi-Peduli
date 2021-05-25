document.addEventListener("DOMContentLoaded", function(event) { 
    closeButton.addEventListener("click", toggleModal);
    donasi();
    donasiButton.addEventListener("click",donasi);
    pengajuanButton.addEventListener("click",pengajuan);
    riwayatButton.addEventListener("click",riwayat);
    editButton.addEventListener("click",edit);
});
var akun ={
    email:"alyachoirum@gmail.com",
    nama:"Alya Choirum Mahmudah",
    alamat:"Surabaya",
    no:"085101440330",
    jk:"p"
};
const email = document.querySelector(".email");
const nama = document.getElementsByClassName("nama");
const alamat = document.querySelector(".alamat");
const no = document.querySelector(".no");
const jk = document.querySelector(".jk");
const modal = document.querySelector(".modal");
const closeButton = document.querySelector(".close-button");

function saveprofil(){
    akun["nama"]= nama[2].value ;
    akun["email"]=email.textContent;
    akun["alamat"]=alamat.value;
    akun["no"]=no.value;
    akun["jk"]=jk.value;
    change();
    toggleModal();
}
function toggleModal() {
    modal.classList.toggle("show-modal");
}
const donasiElement = document.querySelector(".donasi-wrap");
const pengajuanElement = document.querySelector(".pengajuan-wrap");
const riwayatElement = document.querySelector(".riwayat-wrap");
const editElement = document.querySelector(".edit-wrap");

const donasiButton = document.querySelector(".donasi");
const pengajuanButton = document.querySelector(".pengajuan");
const riwayatButton = document.querySelector(".riwayat");
const editButton = document.querySelector(".edit");

function donasi(){
    pengajuanElement.style.display = "none";
    pengajuanElement.style.visibility = "hidden";
    riwayatElement.style.display = "none";
    riwayatElement.style.visibility = "hidden";
    editElement.style.display = "none";
    editElement.style.visibility = "hidden";
    donasiElement.style.display= "block";
    donasiElement.style.visibility = "visible";

    pengajuanButton.classList.remove("active");
    riwayatButton.classList.remove("active");
    editButton.classList.remove("active");
    donasiButton.classList.add("active");
}

function pengajuan(){
    donasiElement.style.display = "none";
    donasiElement.style.visibility = "hidden";
    riwayatElement.style.display = "none";
    riwayatElement.style.visibility = "hidden";
    editElement.style.display = "none";
    editElement.style.visibility = "hidden";
    pengajuanElement.style.display= "block";
    pengajuanElement.style.visibility = "visible";

    riwayatButton.classList.remove("active");
    editButton.classList.remove("active");
    donasiButton.classList.remove("active");
    pengajuanButton.classList.add("active");
}

function riwayat(){
    pengajuanElement.style.display = "none";
    pengajuanElement.style.visibility = "hidden";
    donasiElement.style.display = "none";
    donasiElement.style.visibility = "hidden";
    editElement.style.display = "none";
    editElement.style.visibility = "hidden";
    riwayatElement.style.display= "block";
    riwayatElement.style.visibility = "visible";

    
    editButton.classList.remove("active");
    donasiButton.classList.remove("active");
    pengajuanButton.classList.remove("active"); 
    riwayatButton.classList.add("active");
}

function edit(){
    donasiElement.style.display= "none";
    donasiElement.style.visibility = "hidden";
    pengajuanElement.style.display = "none";
    pengajuanElement.style.visibility = "hidden";
    riwayatElement.style.display = "none";
    riwayatElement.style.visibility = "hidden";
    editElement.style.display = "block";
    editElement.style.visibility = "visible";

    donasiButton.classList.remove("active");
    pengajuanButton.classList.remove("active"); 
    riwayatButton.classList.remove("active");
    editButton.classList.add("active");
}
