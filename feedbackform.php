<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        .feedback-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 30px;
            box-sizing: border-box;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 20px auto;
        }

        .feedback-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            max-width: 80%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .header img:hover {
            transform: scale(1.05);
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #4CAF50;
            background-color: #f1f9f1;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .form-group button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .form-group button:active {
            transform: translateY(0);
        }

        .form-group input:hover,
        .form-group textarea:hover {
            border-color: #a0d9a1;
        }

        .form-group label:hover {
            color: #4CAF50;
        }

        .rating {
            display: flex;
            justify-content: space-around;
            margin: 10px 0;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ffca08;
        }

        .rating input:checked + label:hover,
        .rating input:checked + label:hover ~ label,
        .rating input:checked ~ label:hover,
        .rating input:checked ~ label:hover ~ label {
            color: #ffca08;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index4final.html" target="_blank">HOME</a>
        <a href="feedbackform.html" target="_blank">Feedback</a>
        <a href="index11.html" target="_blank">About us</a>
        <a href="signup.html" target="_blank">Sign Up</a>
        <a href="fixedcart.html" target="_blank">Shop</a>
    </div>
    
    <div class="feedback-container">
        <div class="header">
            <img src="feedback.jpg" alt="Header Image">
            <h2>Feedback Form</h2>
        </div>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5">&#9733;</label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4">&#9733;</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">&#9733;</label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2">&#9733;</label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1">&#9733;</label>
                </div>
            </div>
            <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit Feedback</button>
            </div>
        </form>
    </div>
</body>
</html>
