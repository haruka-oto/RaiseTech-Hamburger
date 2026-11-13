let nav = document.querySelector('.js-sidebarToggle')
let buttons = document.querySelectorAll('.js-buttonToggle')
let bg = document.querySelector('.js-bgToggle')
let btnclose = document.querySelector('.js-buttonToggle-close')
let fixed = document.body;
let pcBreakpoint = window.matchMedia('(min-width: 835px)');

function toggleSidebar() {
  if (pcBreakpoint.matches) return;

  bg.classList.toggle('is-open');
  nav.classList.toggle('is-active');
  fixed.classList.toggle('is-fixed');
}

buttons.forEach(function(button) {
  button.addEventListener('click', toggleSidebar);
});

btnclose.addEventListener('click', toggleSidebar);

function handleTabletMobileChange(e) {
  if(e.matches) {
  nav.classList.remove('is-active');
  bg.classList.remove('is-open');
  fixed.classList.remove('is-fixed');
  nav.classList.remove('l-sidebar__animation');
  
} else {
  nav.classList.add('l-sidebar__animation');

 
};
};




// 1. 初回読み込み時のチェック
handleTabletMobileChange(pcBreakpoint);

// 2. 画面サイズが変更された（リサイズ）時のチェック
pcBreakpoint.addEventListener('change',handleTabletMobileChange);

