<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$answers = $data['answers'];

// Mock scoring. Replace with actual scoring logic.
$score = 0;
foreach ($answers as $questionId => $selectedAnswer) {
    // Check if answer is correct
    if ($selectedAnswer === 'correct_answer') {
        $score++;
    }
}

echo json_encode(['score' => $score]);
