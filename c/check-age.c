#include <stdio.h>

int main() {
  int age;

  printf("Enter your age: ");
  scanf("%d", &age);

  if (age >= 18) {
    printf("\nYoure old brotha!\n");
  } else {
    printf("Enjoy your childhood!");
  }

  return 0;
}
