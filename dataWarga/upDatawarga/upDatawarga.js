var rol1 = document.getElementById("roll1")
var rol2 = document.getElementById("roll2")
var rol3 = document.getElementById("roll3")
var rol4 = document.getElementById("roll4")
var rol5 = document.getElementById("roll5")
var rol6 = document.getElementById("roll6")

rol1.style.display = 'none'
rol2.style.display = 'none'
rol3.style.display = 'none'
rol4.style.display = 'none'
rol5.style.display = 'none'
rol6.style.display = 'none'

function jumlahHunian() {
    var jumlahHuni = document.getElementById("jumlahHuni")
    var pilihJumlah = jumlahHuni.value
    if (pilihJumlah == 1) {
        rol1.style.display = 'block'
        rol2.style.display = 'none'
        rol3.style.display = 'none'
        rol4.style.display = 'none'
        rol5.style.display = 'none'
        rol6.style.display = 'none'
    }
    if (pilihJumlah == 2) {
        rol1.style.display = 'block'
        rol2.style.display = 'block'
        rol3.style.display = 'none'
        rol4.style.display = 'none'
        rol5.style.display = 'none'
        rol6.style.display = 'none'
    }
    if (pilihJumlah == 3) {
        rol1.style.display = 'block'
        rol2.style.display = 'block'
        rol3.style.display = 'block'
        rol4.style.display = 'none'
        rol5.style.display = 'none'
        rol6.style.display = 'none'
    }
    if (pilihJumlah == 4) {
        rol1.style.display = 'block'
        rol2.style.display = 'block'
        rol3.style.display = 'block'
        rol4.style.display = 'block'
        rol5.style.display = 'none'
        rol6.style.display = 'none'
    }
    if (pilihJumlah == 5) {
        rol1.style.display = 'block'
        rol2.style.display = 'block'
        rol3.style.display = 'block'
        rol4.style.display = 'block'
        rol5.style.display = 'block'
        rol6.style.display = 'none'
    }
    if (pilihJumlah == 6) {
        rol1.style.display = 'block'
        rol2.style.display = 'block'
        rol3.style.display = 'block'
        rol4.style.display = 'block'
        rol5.style.display = 'block'
        rol6.style.display = 'block'
    }
}