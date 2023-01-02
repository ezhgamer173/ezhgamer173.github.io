function displayRadioValue(name) {
  var ele = document.getElementsByName(name);
  for(var i = 0; i < ele.length; i++) {
      if(ele[i].checked)
        return ele[i].value;
  }
}
function input(prompt1) {
  return prompt(prompt1);
}
function addToOutput(l){
  document.getElementById("output").innerHTML = document.getElementById("output").innerHTML + l + "<br />"
}
function pick_word(){
  word = document.getElementById("word").value;
  return word;
}
function decline(stem, declension, stem1, stem2){
  if (declension == "1"){
    addToOutput("Nom: " + stem + "a");
    addToOutput("Gen: " + stem + "ae");
    addToOutput("Dat: " + stem + "ae");
    addToOutput("Acc: " + stem + "am");
    addToOutput("Abl: " + stem + "ā");
    addToOutput("Voc: " + stem + "a");
    
    addToOutput("Nom: " + stem + "ae");
    addToOutput("Gen: " + stem + "arum");
    addToOutput("Dat: " + stem + "is");
    addToOutput("Acc: " + stem + "as");
    addToOutput("Abl: " + stem + "is" );
    addToOutput("Voc: " + stem + "ae");}
  else if (declension == "2us"){
    addToOutput("Nom: " + stem + "us");
    addToOutput("Gen: " + stem + "i");
    addToOutput("Dat: " + stem + "o");
    addToOutput("Acc: " + stem + "um");
    addToOutput("Abl: " + stem + "ō");
    addToOutput("Voc: " + stem + "e");
    
    addToOutput("Nom: " + stem + "i");
    addToOutput("Gen: " + stem + "orum");
    addToOutput("Dat: " + stem + "is");
    addToOutput("Acc: " + stem + "os");
    addToOutput("Abl: " + stem + "is" );
    addToOutput("Voc: " + stem + "i");}
  else if (declension == "2m"){
    addToOutput("Nom: " + stem + "um");
    addToOutput("Gen: " + stem + "i");
    addToOutput("Dat: " + stem + "o");
    addToOutput("Acc: " + stem + "um");
    addToOutput("Abl: " + stem + "ō");
    addToOutput("Voc: " + stem + "um");
    addToOutput("Loc: " + stem + "i");
 
    addToOutput("Nom: " + stem + "a");
    addToOutput("Gen: " + stem + "orum");
    addToOutput("Dat: " + stem + "is");
    addToOutput("Acc: " + stem + "a");
    addToOutput("Abl: " + stem + "is");
    addToOutput("Voc: " + stem + "a");}
  else if (declension == "2er"){
    addToOutput("Nom: " + stem);
    addToOutput("Gen: " + stem + "i");
    addToOutput("Dat: " + stem + "o");
    addToOutput("Acc: " + stem + "um");
    addToOutput("Abl: " + stem + "ō");
    addToOutput("Voc: " + stem);

    addToOutput("Nom: " + stem + "i");
    addToOutput("Gen: " + stem + "orum");
    addToOutput("Dat: " + stem + "is");
    addToOutput("Acc: " + stem + "os");
    addToOutput("Abl: " + stem + "is" );
    addToOutput("Voc: " + stem + "i");}
  else if (declension == "3r"){
    addToOutput("Nom: " + stem);
    addToOutput("Gen: " + stem + "is");
    addToOutput("Dat: " + stem + "i");
    addToOutput("Acc: " + stem + "em");
    addToOutput("Abl: " + stem + "e");
    addToOutput("Voc: " + stem);

    addToOutput("Nom: " + stem + "es");
    addToOutput("Gen: " + stem + "um");
    addToOutput("Dat: " + stem + "ibus");
    addToOutput("Acc: " + stem + "es");
    addToOutput("Abl: " + stem + "ibus");
    addToOutput("Voc: " + stem + "es");}
  else if (declension == "3n"){
    addToOutput("Nom: " + stem1);
    addToOutput("Gen: " + stem2 + "is");
    addToOutput("Dat: " + stem2 + "i");
    addToOutput("Acc: " + stem2 + "em");
    addToOutput("Abl: " + stem2 + "e");
    addToOutput("Voc: " + stem1);

    addToOutput("Nom: " + stem2 + "a");
    addToOutput("Gen: " + stem2 + "um");
    addToOutput("Dat: " + stem2 + "ibus");
    addToOutput("Acc: " + stem2 + "a");
    addToOutput("Abl: " + stem2 + "ibus" );
    addToOutput("Voc: " + stem2 + "a");}
  else if (declension == "3neu"){
    addToOutput("Nom: " + stem1);
    addToOutput("Gen: " + stem2 + "is");
    addToOutput("Dat: " + stem2 + "i");
    addToOutput("Acc: " + stem1);
    addToOutput("Abl: " + stem2 + "e");
    addToOutput("Voc: " + stem1);

    addToOutput("Nom: " + stem2 + "a");
    addToOutput("Gen: " + stem2 + "um");
    addToOutput("Dat: " + stem2 + "ibus");
    addToOutput("Acc: " + stem2 + "a");
    addToOutput("Abl: " + stem2 + "ibus" );
    addToOutput("Voc: " + stem2 + "a");}
  else if (declension == "4mf"){
    addToOutput("Nom: " + stem + "us");
    addToOutput("Gen: " + stem + "ūs");
    addToOutput("Dat: " + stem + "ūi");
    addToOutput("Acc: " + stem + "um");
    addToOutput("Abl: " + stem + "ū");
    addToOutput("Voc: " + stem + "us");

    addToOutput("Nom: " + stem + "ūs");
    addToOutput("Gen: " + stem + "uum");
    addToOutput("Dat: " + stem + "ibus");
    addToOutput("Acc: " + stem + "ūs");
    addToOutput("Abl: " + stem + "ibus" );
    addToOutput("Voc: " + stem + "ūs");}
  else if (declension == "4n"){
    addToOutput("Nom: " + stem + "ū");
    addToOutput("Gen: " + stem + "ūs");
    addToOutput("Dat: " + stem + "ū");
    addToOutput("Acc: " + stem + "ū");
    addToOutput("Abl: " + stem + "ū");
    addToOutput("Voc: " + stem + "ū");

    addToOutput("Nom: " + stem + "ua");
    addToOutput("Gen: " + stem + "uum");
    addToOutput("Dat: " + stem + "ibus");
    addToOutput("Acc: " + stem + "ua");
    addToOutput("Abl: " + stem + "ibus" );
    addToOutput("Voc: " + stem + "ua");}
  else if (declension == "5"){
    addToOutput("Nom: " + stem + "ēs");
    addToOutput("Gen: " + stem + "eī");
    addToOutput("Dat: " + stem + "eī");
    addToOutput("Acc: " + stem + "em");
    addToOutput("Abl: " + stem + "ē");
    addToOutput("Voc: " + stem + "ēs");

    addToOutput("Nom: " + stem + "ēs");
    addToOutput("Gen: " + stem + "ērum");
    addToOutput("Dat: " + stem + "ēbus");
    addToOutput("Acc: " + stem + "ēs");
    addToOutput("Abl: " + stem + "ēbus" );
    addToOutput("Voc: " + stem + "ēs");}}
function pick_declension(word,gender){
  var declension = "";
  if (word.endsWith("us")){
    declension = "4";}
  else if (word.endsWith("ae")){
    declension = "1";}
  else if (word.endsWith("ei")){
    declension = "5";}
  else if (word.endsWith("i") && !(word.endsWith("ri"))){
    declension = "2";}
  else if (word.endsWith("i") && (word.endsWith("ri"))){
    declension = "2er";}
  else if (gender == "yes"){
    declension = "3neu";}
  else if (word.endsWith("is") && !(word.endsWith("nis"))){
    declension = "3r";}
  else if (word.endsWith("is") && (word.endsWith("nis"))){
    declension = "3n";}
  else{
    alert("either youre wrong or i havent coded something lol");}
  return declension;
}
function find_stem(word,declension){
    var stem = "";
  if (declension == "1" || declension == "3r" || declension == "3n" || declension == "3neu" || declension == "4mf" || declension == "4n" || declension == "5"){
    stem = word.substring(0,word.length-2);
  }
  else if (declension == "2us" || declension == "2m" || declension == "2er"){
    stem = word.substring(0,word.length-1);
  }
  else{
    alert("uh oh stinky");
  }
  return stem;
}












function check() {
  document.getElementById("output").innerHTML = ""
  var word = pick_word();

var is_it_third = displayRadioValue("third?");
var gender = "";
var declension = "";
var stem = "";
var stem1 = "";
var stem2 = "";
var third_nom = "";
if (is_it_third == "yes"){
  third_nom = input("Please input the nominative singular of the word as well.");
  gender = input("Is this word neuter? Please input \"yes\" or \"no\"." );
  if (gender == "yes"){
    declension = "3neu";}
  else if (gender == "no"){
    var ok = "ok";
  }
  else{
    alert("uh oh stinky");}
}
declension = pick_declension(word, gender);

if (declension == "2"){
  var gender = input("Is this word neuter? Please input \"yes\" or \"no\".");
  if (gender == "yes"){
    declension = "2m";}
  else if (gender == "no"){
    declension = "2us";}
  else{
    alert("uh oh stinky");}
}
if (declension == "4"){
  gender = input("Is this word neuter? Please input \"yes\" or \"no\".");
  if (gender == "yes"){
    declension = "4n";}
  else if (gender == "no"){
    declension = "4mf";}
  else{
    alert("uh oh stinky");}
}
stem = find_stem(word, declension);
if (declension == "3n"){
  stem1 = third_nom;
  stem2 = stem;
}

if (declension == "3neu"){
  stem1 = third_nom;
  stem2 = stem;
}
decline(stem, declension, stem1, stem2);
}