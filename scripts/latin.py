#takes user input for a latin word
def pick_word():
  word = input("What latin word would you like to decline? Please input the genitive singular. For example: puellae: ")
  print("") 
  return word

#assigns the given word a declension
def pick_declension(word):
  if (word.endswith("us")) == True:
    declension = "4"
  elif word.endswith("ae") == True:
    declension = "1"
  elif (word.endswith("ei")) == True:
    declension = "5"
  elif word.endswith("i") and not (word.endswith("ri")) == True:
    declension = "2"
  elif (word.endswith("i")) and (word.endswith("ri")) == True:
    declension = "2er"
  elif gender == "yes":
    declension = "3neu"
  elif (word.endswith("is")) and not (word.endswith("nis")) == True:
    declension = "3r"
  elif (word.endswith("is")) and (word.endswith("nis")) == True:
    declension = "3n"
  else:
    print("either youre wrong or i havent coded something lol")
  return declension

#uses the declension to find the stem of the word
def find_stem(word):  
  if declension == "1" or declension == "3r" or declension == "3n" or declension == "3neu" or declension == "4mf" or declension == "4n" or declension == "5":
    stem = word[:-2]
  elif declension == "2us" or declension == "2m" or declension == "2er":
    stem = word[:-1]
  else:
    print("uh oh stinky")
  return stem
  
#this function adds the appropriate endings to the given word based on its stem and declension
def decline():
  if declension == "1":
    print("Nom: " + stem + "a")
    print("Gen: " + stem + "ae")
    print("Dat: " + stem + "ae")
    print("Acc: " + stem + "am")
    print("Abl: " + stem + "ā")
    print("Voc: " + stem + "a")
    print("")
    print("Nom: " + stem + "ae")
    print("Gen: " + stem + "arum")
    print("Dat: " + stem + "is")
    print("Acc: " + stem + "as")
    print("Abl: " + stem + "is" )
    print("Voc: " + stem + "ae")
  elif declension == "2us":
    print("Nom: " + stem + "us")
    print("Gen: " + stem + "i")
    print("Dat: " + stem + "o")
    print("Acc: " + stem + "um")
    print("Abl: " + stem + "ō")
    print("Voc: " + stem + "e")
    print("")
    print("Nom: " + stem + "i")
    print("Gen: " + stem + "orum")
    print("Dat: " + stem + "is")
    print("Acc: " + stem + "os")
    print("Abl: " + stem + "is" )
    print("Voc: " + stem + "i")
  elif declension == "2m":
    print("Nom: " + stem + "um")
    print("Gen: " + stem + "i")
    print("Dat: " + stem + "o")
    print("Acc: " + stem + "um")
    print("Abl: " + stem + "ō")
    print("Voc: " + stem + "um")
    print("Loc: " + stem + "i")
    print("")
    print("Nom: " + stem + "a")
    print("Gen: " + stem + "orum")
    print("Dat: " + stem + "is")
    print("Acc: " + stem + "a")
    print("Abl: " + stem + "is")
    print("Voc: " + stem + "a")
  elif declension == "2er":
    print("Nom: " + stem)
    print("Gen: " + stem + "i")
    print("Dat: " + stem + "o")
    print("Acc: " + stem + "um")
    print("Abl: " + stem + "ō")
    print("Voc: " + stem)
    print("")
    print("Nom: " + stem + "i")
    print("Gen: " + stem + "orum")
    print("Dat: " + stem + "is")
    print("Acc: " + stem + "os")
    print("Abl: " + stem + "is" )
    print("Voc: " + stem + "i")
  elif declension == "3r":
    print("Nom: " + stem)
    print("Gen: " + stem + "is")
    print("Dat: " + stem + "i")
    print("Acc: " + stem + "em")
    print("Abl: " + stem + "e")
    print("Voc: " + stem)
    print("")
    print("Nom: " + stem + "es")
    print("Gen: " + stem + "um")
    print("Dat: " + stem + "ibus")
    print("Acc: " + stem + "es")
    print("Abl: " + stem + "ibus")
    prrint("Voc: " + stem + "es")
  elif declension == "3n":
    print("Nom: " + stem1)
    print("Gen: " + stem2 + "is")
    print("Dat: " + stem2 + "i")
    print("Acc: " + stem2 + "em")
    print("Abl: " + stem2 + "e")
    print("Voc: " + stem1)
    print("")
    print("Nom: " + stem2 + "a")
    print("Gen: " + stem2 + "um")
    print("Dat: " + stem2 + "ibus")
    print("Acc: " + stem2 + "a")
    print("Abl: " + stem2 + "ibus" )
    print("Voc: " + stem2 + "a")
  elif declension == "3neu":
    print("Nom: " + stem1)
    print("Gen: " + stem2 + "is")
    print("Dat: " + stem2 + "i")
    print("Acc: " + stem1)
    print("Abl: " + stem2 + "e")
    print("Voc: " + stem1)
    print("")
    print("Nom: " + stem2 + "a")
    print("Gen: " + stem2 + "um")
    print("Dat: " + stem2 + "ibus")
    print("Acc: " + stem2 + "a")
    print("Abl: " + stem2 + "ibus" )
    print("Voc: " + stem2 + "a")
  elif declension == "4mf":
    print("Nom: " + stem + "us")
    print("Gen: " + stem + "ūs")
    print("Dat: " + stem + "ūi")
    print("Acc: " + stem + "um")
    print("Abl: " + stem + "ū")
    print("Voc: " + stem + "us")
    print("")
    print("Nom: " + stem + "ūs")
    print("Gen: " + stem + "uum")
    print("Dat: " + stem + "ibus")
    print("Acc: " + stem + "ūs")
    print("Abl: " + stem + "ibus" )
    print("Voc: " + stem + "ūs")
  elif declension == "4n":
    print("Nom: " + stem + "ū")
    print("Gen: " + stem + "ūs")
    print("Dat: " + stem + "ū")
    print("Acc: " + stem + "ū")
    print("Abl: " + stem + "ū")
    print("Voc: " + stem + "ū")
    print("")
    print("Nom: " + stem + "ua")
    print("Gen: " + stem + "uum")
    print("Dat: " + stem + "ibus")
    print("Acc: " + stem + "ua")
    print("Abl: " + stem + "ibus" )
    print("Voc: " + stem + "ua")
  elif declension == "5":
    print("Nom: " + stem + "ēs")
    print("Gen: " + stem + "eī")
    print("Dat: " + stem + "eī")
    print("Acc: " + stem + "em")
    print("Abl: " + stem + "ē")
    print("Voc: " + stem + "ēs")
    print("")
    print("Nom: " + stem + "ēs")
    print("Gen: " + stem + "ērum")
    print("Dat: " + stem + "ēbus")
    print("Acc: " + stem + "ēs")
    print("Abl: " + stem + "ēbus" )
    print("Voc: " + stem + "ēs")
    
#this is the main body of the code
word = pick_word()

is_it_third = input("Is this word third declension? Please put \"yes\" or \"no\".")

if is_it_third == "yes":
  third_nom = input("Please input the nominative singular of the word as well.")
  gender = input("Is this word neuter? Please input \"yes\" or \"no\"." )
  if gender == "yes":
    declension = "3neu"
  else:
    print ("uh oh stinky")

declension = pick_declension(word)

if declension == "2":
  gender = input("Is this word neuter? Please input \"yes\" or \"no\".")
  if gender == "yes":
    declension = "2m"
  elif gender == "no":
    declension = "2us"
  else:
    print ("uh oh stinky")

if declension == "4":
  gender = input("Is this word neuter? Please input \"yes\" or \"no\".")
  if gender == "yes":
    declension = "4n"
  elif gender == "no":
    declension = "4mf"
  else:
    print("uh oh stinky")

if declension == "3n":
  stem1 = third_nom
  stem2 = stem

stem = find_stem(word)

if declension == "3neu":
  stem1 = third_nom
  stem2 = stem

print("")

decline()

print ("")

print("hello eli i made this code i hope i did a good job okay bye bye")