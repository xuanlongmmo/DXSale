
const sl__dxmint = document.querySelector.bind(document);
const sl__dxmint__s = document.querySelectorAll.bind(document);

const sl__dxmint__tabs = sl__dxmint__s(".select__list-item");
const sl__dxmint__panes = sl__dxmint__s(".DxDrop__body-box-item");

const sl__dxmint__tabActive = sl__dxmint(".select__list-item.active");

sl__dxmint__tabs.forEach((sl__dxmint__tab, index) => {
  const sl__dxmint__pane = sl__dxmint__panes[index];

  sl__dxmint__tab.onclick = function () {
    sl__dxmint(".select__list-item.active").classList.remove("active");
    sl__dxmint(".DxDrop__body-box-item.active").classList.remove("active");

    this.classList.add("active");
    sl__dxmint__pane.classList.add("active");
  };
});

