class game {
  final int id;
  final String title;
  final String genre;
  final int price;

  const game({
    required this.id,
    required this.title,
    required this.genre,
    required this.price,
    
  });

  factory game.fromJson(Map<String, dynamic> json) {
    return game(
      id: json['id'],
      title: json['title'],
      genre: json['genre'],
      price: json['price'],
    );
  }
}