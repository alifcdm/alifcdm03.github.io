function kirim() {
  let nama = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let pesan = document.getElementById('pesan').value;

  alert(`Hai, ${nama}
  \nemail kamu adalah ${email}
  \npesan kamu adalah ${pesan}
  \nTerima kasih atas pesan kritik/saran yang telah kamu kirimkan, secepatnya akan saya tanggapi pesan dari kamu :)`);
}
function tentang1() {
  var x = document.getElementById('temu');
  if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
}
