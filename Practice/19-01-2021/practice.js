//ES6 Classes

class Person {
    constructor(name, yob, job){
        this.name = name;
        this.yob = yob;
        this.job = job;
    }
    calcage() {
        this.age = new Date().getFullYear() - this.yob;
        console.log(this.age);
    }

    static greeting() {
        console.log("Hello from static !!");
    }
}

var john = new Person('John', 1992, 'Teacher');
john.calcage();

//Calling static method with class name
Person.greeting();


//Inheritance
class Athlete extends Person{
    constructor(name, yob, job, games, medals){
        super(name, yob, job);
        this.games = games;
        this.medals = medals;
    }
    wonMedal() {
        this.medals++;
        console.log(this.medals);
    }
}

const Mark = new Athlete('Mark', 1990, 'Athlete', 4, 8);
Mark.wonMedal();
Mark.calcage();






