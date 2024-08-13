<?php
header('Content-Type: application/json');

// Mock data. Replace with database or data source.
$questions = [
    ['id' => 1, 'topic' => 'Sports', 'level' => 'Beginner', 'question' => 'What is the national sport of Canada?', 'options' => ['Ice Hockey', 'Basketball', 'Soccer', 'Baseball'], 'answer' => 'Ice Hockey'],
    ['id' => 2, 'topic' => 'Sports', 'level' => 'Beginner', 'question' => 'Which sport is known as "the beautiful game"?', 'options' => ['Football', 'Tennis', 'Cricket', 'Rugby'], 'answer' => 'Football'],
    ['id' => 3, 'topic' => 'Sports', 'level' => 'Beginner', 'question' => 'How many players are there on a soccer team?', 'options' => ['11', '7', '9', '12'], 'answer' => '11'],
    ['id' => 4, 'topic' => 'Sports', 'level' => 'Beginner', 'question' => 'Which country won the FIFA World Cup in 2018?', 'options' => ['France', 'Brazil', 'Germany', 'Argentina'], 'answer' => 'France'],    // Add more questions here

    ['id' => 5, 'topic' => 'Sports', 'level' => 'Intermediate', 'question' => 'In which year were the first modern Olympic Games held?', 'options' => ['1896', '1900', '1924', '1960'], 'answer' => '1896'],
    ['id' => 6, 'topic' => 'Sports', 'level' => 'Intermediate', 'question' => 'Which tennis tournament is played on grass courts?', 'options' => ['Wimbledon', 'US Open', 'French Open', 'Australian Open'], 'answer' => 'Wimbledon'],
    ['id' => 7, 'topic' => 'Sports', 'level' => 'Intermediate', 'question' => 'Who holds the record for the most home runs in Major League Baseball?', 'options' => ['Barry Bonds', 'Hank Aaron', 'Babe Ruth', 'Ken Griffey Jr.'], 'answer' => 'Barry Bonds'],
    ['id' => 11, 'topic' => 'Science & Technology', 'level' => 'Beginner', 'question' => 'What is the chemical symbol for water?', 'options' => ['H2O', 'O2', 'CO2', 'NaCl'], 'answer' => 'H2O'],
    ['id' => 12, 'topic' => 'Science & Technology', 'level' => 'Beginner', 'question' => 'How many planets are there in the Solar System?', 'options' => ['8', '9', '7', '10'], 'answer' => '8'],
    ['id' => 13, 'topic' => 'Science & Technology', 'level' => 'Beginner', 'question' => 'Which planet is known as the Red Planet?', 'options' => ['Mars', 'Jupiter', 'Saturn', 'Venus'], 'answer' => 'Mars'],
    ['id' => 14, 'topic' => 'Science & Technology', 'level' => 'Beginner', 'question' => 'What is the powerhouse of the cell?', 'options' => ['Mitochondria', 'Nucleus', 'Ribosome', 'Endoplasmic Reticulum'], 'answer' => 'Mitochondria'],
    ['id' => 15, 'topic' => 'Science & Technology', 'level' => 'Intermediate', 'question' => 'Who is known as the father of modern physics?', 'options' => ['Albert Einstein', 'Isaac Newton', 'Galileo Galilei', 'Niels Bohr'], 'answer' => 'Albert Einstein'],
    ['id' => 16, 'topic' => 'Science & Technology', 'level' => 'Intermediate', 'question' => 'What does DNA stand for?', 'options' => ['Deoxyribonucleic Acid', 'Ribonucleic Acid', 'Deoxyribonucleotide Acid', 'Ribonucleotide Acid'], 'answer' => 'Deoxyribonucleic Acid'],
    ['id' => 17, 'topic' => 'Science & Technology', 'level' => 'Intermediate', 'question' => 'Which element is represented by the symbol Au?', 'options' => ['Gold', 'Silver', 'Iron', 'Lead'], 'answer' => 'Gold']];
$topic = $_GET['topic'] ?? '';
$level = $_GET['level'] ?? '';

$filteredQuestions = array_filter($questions, function($q) use ($topic, $level) {
    return $q['topic'] === $topic && $q['level'] === $level;
});

echo json_encode(array_values($filteredQuestions));
