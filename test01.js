var answer = prompt('数値を入れてください');
alert(answer);




//3.
var animal = ['パンダ', 'ライオン', 'キリン'];
var i = 0;
while (i < animal.length) {
  alert(animal[i]);
  i++; // 「i += 1」と書いても同じ
}
//4.
var answer = prompt('パンダとキリンどちらが好きですか？');
if (answer == 'パンダ') {
  alert('パンダですね');
} else if (answer == 'キリン') {
  alert('キリンですね');
}
//5.
var answer = prompt('パンダとライオンとキリンのうちどれが好きですか？');
if (answer == 'パンダ') {
  alert('パンダですね');
} else if (answer == 'キリン') {
  alert('キリンですね');
} else if (answer == 'ライオン') {
  alert('ライオンですか！');
}
//7.
var animal = {'name': 'パンダ', 'weight': 80};
alert(animal['name']);
alert(animal['weight']);
var animal = {'name': 'ライオン', 'weight': 200};
alert(animal['name']);
alert(animal['weight']);
var animal = {'name': 'キリン', 'weight': 300};
alert(animal['name']);
alert(animal['weight']);
//6.
var fanimal = [
  {'name': 'パンダ', 'weight': 80},  // 0番目のオブジェクト変数
  {'name': 'ライオン', 'weight': 200},  // 1番目のオブジェクト変数
  {'name': 'キリン', 'weight': 300}   // 2番目のオブジェクト変数
];
alert(animal[1].weight);
