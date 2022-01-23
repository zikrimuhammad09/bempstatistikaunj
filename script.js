// Dengan Jquery
$(document).ready(() => {
  //event ketika menghapus data
  $(document).on("click", ".hapus", function (e) {
    e.preventDefault();
    Swal.fire({
      title: "Yakin ingin menghapus data?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Hapus",
    }).then((result) => {
      if (result.isConfirmed) {
        $("#container").load("ajax/" + $(this).attr("href"));
      }
    });
  });
  // event ketika keyword ditulis
  $("#keyword").on("keyup", () => {
    $("#container").load(
      "ajax/search.php?keyword=" + encodeURIComponent($("#keyword").val())
    );
  });
});

// Dengan Javascript biasa
// // ambil elemen2 yang dibutuhkan
// var keyword = document.getElementById("keyword");
// var container = document.getElementById("container");

// // tambahkan event ketikaa keyword ditulis
// keyword.addEventListener("keyup", () => {
//   // buat object ajax
//   var xhr = new XMLHttpRequest();

//   // cek kesiapan ajax
//   xhr.onreadystatechange = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   // eksekusi ajax
//   xhr.open("GET", `ajax/anggota.php?keyword=${keyword.value}`, true);
//   xhr.send();
// });
