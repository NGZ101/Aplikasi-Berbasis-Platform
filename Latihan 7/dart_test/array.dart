void main() {
  print("Isi List:");
  var arr = [ 
    [6, 12, 18, 24], 
    [3, 5, 7, 9, 11], 
    [64, 125, 216, 343, 512, 729], 
    [3, 10, 17, 24, 31, 38, 45,] ];
  for (var arr2d in arr){
    print(arr2d.join(' '));
  }
}