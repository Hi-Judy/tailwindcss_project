//이미지 슬라이드
const slides = document.querySelector('#slides'); //전체 슬라이드 컨테이너 
const slideImg = document.querySelectorAll('#carousel-item'); //모든 슬라이드들 
let currentIdx = 0; //현재 슬라이드 index 
const slideCount = slideImg.length; // 슬라이드 개수 
const prev = document.querySelector('#data-carousel-prev'); //이전 버튼 
const next = document.querySelector('#data-carousel-next'); //다음 버튼 


function moveSlide(num) { 
	slides.style.left = -num * 400 + 'px'; 
	currentIdx = num; 
} 

prev.addEventListener('click', function () { 
	/*첫 번째 슬라이드로 표시 됐을때는 이전 버튼 눌러도 아무런 반응 없게 하기 위해 
	currentIdx !==0일때만 moveSlide 함수 불러옴 */
	
	if (currentIdx !== 0) moveSlide(currentIdx - 1); 
}); 

next.addEventListener('click', function () { 
	/* 마지막 슬라이드로 표시 됐을때는 다음 버튼 눌러도 아무런 반응 없게 하기 위해 
	currentIdx !==slideCount - 1 일때만 moveSlide 함수 불러옴 */ 
	if (currentIdx !== slideCount - 1) { 
		moveSlide(currentIdx + 1); 
	} 
});

//탭
const tabList = document.querySelectorAll(".tab_list");
const tabContent = document.querySelectorAll(".tab_content");
console.log(tabList);
console.log(tabContent);

tabList.forEach((item) => {
  item.addEventListener("click", tabHandler);
});

function tabHandler(item) {
  const tabTarget = item.currentTarget;
  const target = tabTarget.dataset.tab;
  console.log(tabTarget);
  console.log(target);

//  console.log(document.querySelector("#" + target));

  tabList.forEach((title) => {
    title.classList.remove("active");
  });
  
  tabContent.forEach((target) => {
    target.classList.remove("target");
  });
  
  tabTarget.classList.add("active");
  document.querySelector("#" + target).classList.add("target");
}

//20220512 수정


