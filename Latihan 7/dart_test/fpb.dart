import 'dart:io';
void main() {
  int bil1, bil2;
  stdout.write("Bilangan 1: ");
  bil1 = int.parse(stdin.readLineSync()!);
  stdout.write("Bilangan 2: ");
  bil2 = int.parse(stdin.readLineSync()!);

  int fpb(bil1, bil2) {
    while (bil2 != 0) {
      int sisa = bil1 % bil2;
      bil1 = bil2;
      bil2 = sisa;
    }
    return bil1;
  }

  int hasilfbp = fpb(bil1, bil2);
  print('FPB $bil1 dan $bil2 = $hasilfbp');
}