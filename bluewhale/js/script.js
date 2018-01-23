function copyToClipBoard() {
  var copyText = document.getElementById("wallet");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied Bitcoin wallet ID");
}