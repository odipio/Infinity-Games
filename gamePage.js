 class Game {
     constructor(title, description, trailer, developer, publisher, year, platforms, reviews) {
         this.title = title;
         this.description = description;
         this.trailer = trailer;
         this.developer = developer;
         this.publisher = publisher;
         this.year = year;
         this.platforms = platforms;
         this.reviews = reviews;
    }
    getTitle() {
        return this.title;
    }
    getDesc() {
        return this.description;
    }
    getTrailer() {
        return this.trailer;
    }
    getDeveloper() {
        return this.developer;
    }
    getPublisher() {
        return this.publisher;
    }
    getYear() {
        return this.year;
    }
    getPlatforms() {
        return this.platforms;
    }
    getReviews() {
        return this.reviews;
    }
              
}