#include <stdio.h>


int main() {
  char name[50];
  // variables labed as array of char are actually string
  // setting the amount of space adds automatically null terminator
  int age;
  char favoriteLetter;
  
  printf("What is you name: ");
  scanf("%s", name);

  printf("How old are you: "); 
  scanf("%d", &age);

  printf("And what is your favorite letter in alphabet? ");
  scanf(" %c", &favoriteLetter);

  printf("\nWelcome %s", name);
  printf("\nYou are %d years old right?", age); // Here we need to pass the value not the address
  printf("\nYour favorite letter is: %c ? great mine too!\n", favoriteLetter);
}
