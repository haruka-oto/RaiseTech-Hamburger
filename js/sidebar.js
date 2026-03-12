
let nav = document.querySelector('.js-sidebarToggle')
let btn = document.querySelector('.js-buttonToggle')
let bg = document.querySelector('.js-bgToggle')
let btnclose = document.querySelector('.js-buttonToggle-close')
let fixed = document.body;

btn.addEventListener('click', function() {
  bg.classList.toggle('is-open');
  nav.classList.toggle('is-active');
  console.log('ここまで');
  fixed.classList.toggle('is-fixed');
});

btnclose.addEventListener('click',function(){
  bg.classList.toggle('is-open');
  nav.classList.toggle('is-active');
  fixed.classList.toggle('is-fixed');
});

let pcBreakpoint = window.matchMedia('(min-width: 835px)');

function handleTabletMobileChange(e) {
  if(e.matches) {
  nav.classList.remove('is-active');
  bg.classList.remove('is-open');
  fixed.classList.remove('is-fixed');

} else {
  console.log('タブレット以下')
};
};



// 1. 初回読み込み時のチェック
handleTabletMobileChange(pcBreakpoint);

// 2. 画面サイズが変更された（リサイズ）時のチェック
pcBreakpoint.addEventListener('change',handleTabletMobileChange);

