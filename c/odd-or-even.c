#include <stdio.h>

int main() {
  int number;

  printf("Choose a number: ");
  scanf("%d", &number);

  if (number % 2 == 0) {
    printf("\nThe number is even \n");
  } else {
    printf("\nThe number is odd\n");
  }

  return 0;
}
