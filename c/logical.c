#include <stdio.h>
#include <stdbool.h>

int main() {
  bool x = true;
  bool y = false;

  printf("%b", x || y); 
  printf("%b", x && y); 
  printf("%b", !x); 
  printf("%b", !y); 

  return 0;
}

