
const sl__dxmint = document.querySelector.bind(document);
const sl__dxmint__s = document.querySelectorAll.bind(document);

const sl__dxmint__tabs = sl__dxmint__s(".DxMint__body-nav-item");
const sl__dxmint__panes = sl__dxmint__s(".DxMint__body-pane");

const sl__dxmint__tabActive = sl__dxmint(".DxMint__body-nav-item.active");
const sl__dxmint__line = sl__dxmint(".DxMint__body-nav .line");

sl__dxmint__line.style.left = sl__dxmint__tabActive.offsetLeft + "px";
sl__dxmint__line.style.width = sl__dxmint__tabActive.offsetWidth + "px";

sl__dxmint__tabs.forEach((sl__dxmint__tab, index) => {
  const sl__dxmint__pane = sl__dxmint__panes[index];

  sl__dxmint__tab.onclick = function () {
    sl__dxmint(".DxMint__body-nav-item.active").classList.remove("active");
    sl__dxmint(".DxMint__body-pane.active").classList.remove("active");

    sl__dxmint__line.style.left = this.offsetLeft + "px";
    sl__dxmint__line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
    sl__dxmint__pane.classList.add("active");
  };
});



