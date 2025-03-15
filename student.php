<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Development Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="quiz-container">
        <h1>Personal Development Assessment</h1>
        <form action="submit-quiz.php" method="POST" class="quiz-form">
            <!-- Section 1: Personal Tags -->
            <div class="question-section">
                <h2>1. Personal Tags</h2>
                <p>Write three words (tags) that you want people to remember about you:</p>
                <div class="form-group">
                    <input type="text" name="tag1" placeholder="First tag" required>
                    <input type="text" name="tag2" placeholder="Second tag" required>
                    <input type="text" name="tag3" placeholder="Third tag" required>
                </div>
            </div>

            <!-- Section 2: Daily Actions -->
            <div class="question-section">
                <h2>2. Daily Actions</h2>
                <p>What daily actions justify these tags?</p>
                <div class="form-group">
                    <label>Tag 1 Actions:</label>
                    <textarea name="tag1_actions" rows="3" required></textarea>
                    
                    <label>Tag 2 Actions:</label>
                    <textarea name="tag2_actions" rows="3" required></textarea>
                    
                    <label>Tag 3 Actions:</label>
                    <textarea name="tag3_actions" rows="3" required></textarea>
                </div>
            </div>

            <!-- Section 3: Trust -->
            <div class="question-section">
                <h2>3. Trust Assessment</h2>
                <p>Are you a trustworthy person? Why or why not?</p>
                <textarea name="trust_response" rows="4" required></textarea>
            </div>

            <!-- Section 4: Reputation Building -->
            <div class="question-section">
                <h2>4. Building Your Reputation</h2>
                <p>How can you build your reputation around your chosen keywords?</p>
                <textarea name="reputation_building" rows="5" required></textarea>
            </div>

            <!-- Section 5: Being Exemplary -->
            <div class="question-section">
                <h2>5. Being Exemplary</h2>
                <div class="form-group">
                    <label>What does "being exemplary" mean to you?</label>
                    <textarea name="exemplary_meaning" rows="3" required></textarea>
                    
                    <label>How can you become exemplary?</label>
                    <textarea name="exemplary_how" rows="3" required></textarea>
                    
                    <label>What do you need to learn to become exemplary?</label>
                    <textarea name="exemplary_learning" rows="3" required></textarea>
                </div>
            </div>

            <!-- Section 6: Core Values -->
            <div class="question-section">
                <h2>6. Your Core Values</h2>
                <p>List your 5 key values that guide your daily life:</p>
                <div class="form-group">
                    <input type="text" name="value1" placeholder="Value 1" required>
                    <input type="text" name="value2" placeholder="Value 2" required>
                    <input type="text" name="value3" placeholder="Value 3" required>
                    <input type="text" name="value4" placeholder="Value 4" required>
                    <input type="text" name="value5" placeholder="Value 5" required>
                </div>
            </div>

            <!-- Section 7: Important Causes -->
            <div class="question-section">
                <h2>7. Important Causes</h2>
                <p>What causes are important to you?</p>
                <div class="causes-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cause</th>
                                <th>Daily/Weekly Actions</th>
                                <th>Reading Materials</th>
                                <th>Current Events</th>
                                <th>Group Engagement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="cause1"></td>
                                <td><textarea name="actions1"></textarea></td>
                                <td><input type="checkbox" name="reading1"></td>
                                <td><input type="checkbox" name="events1"></td>
                                <td><input type="checkbox" name="engagement1"></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Future Engagement -->
            <div class="question-section">
                <h2>8. Future Engagement</h2>
                <p>Would you like to engage in a cause next month? If yes, which one and how?</p>
                <textarea name="future_engagement" rows="4"></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit Responses</button>
        </form>
    </div>
</body>
</html>
