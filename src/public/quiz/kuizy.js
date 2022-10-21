'use strict';


/**
 * 以下で各設問のボタンクリックによって（）内の引数を呼び出す
 * @param {number} questionNumber 大問番号
 * @param {number} optionNumberOfQuestions 選択肢番号
 * @return {Array} シャッフル後の問題の配列
 */
function clickSelectedButton(questionNumber, optionNumberOfQuestions, validNumber) {
	
	/**
	 * クリックしたらとりあえず全て赤にする
   * ボタン表示
   */
	let buttonOfOptionNumber = document.getElementById('answerChoice_'+ questionNumber +'_'+ optionNumberOfQuestions +'_'+ validNumber);
	// console.log(buttonOfOptionNumber);
	buttonOfOptionNumber.classList.add('incorrectAnswerBox');


	if (validNumber === 1) {
		let trueChoice = document.getElementById('answerChoice_'+ questionNumber +'_'+ optionNumberOfQuestions +'_'+ validNumber);
		trueChoice.classList.add('answerBox');
		trueChoice.classList.remove('incorrectAnswerBox');
		document.getElementById('answerDisplay'+ questionNumber).style.display = 'block';
	} else {
		document.getElementById('incorrectAnswerDisplay'+ questionNumber).style.display = 'block';
	}

	// let selectedButton = document.querySelectorAll('.buttonOfOptionNumber');
  // selectedButton.forEach(element => {
	// 	element.style.pointerEvents = 'none';
	// });
}


/**
 * サイドメニューの開閉
 * @return {void} - コンソールに表示
 */
function hamburger() {
  document.getElementById('menu').classList.toggle('in');
}
document.getElementById('hamburger').addEventListener('click' , function () {
  hamburger();
} );

