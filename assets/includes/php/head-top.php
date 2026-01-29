    <?php
    $phonePretty = "+1 (808) 829-2203";
    $phoneLink = "+18088292203";
    $contactEmail = "nickloewenstine@gmail.com";

    // Calculate Reviews Data - Last Updated 2/22/24 by Mike.
    function calculateTotalReviewsAndAverageRating($ratings)
    {
        $totalReviews = 0;
        $sumOfRatings = 0;

        foreach ($ratings as $platform => $data) {
            $totalReviews += $data['total']; // Total number of reviews
            $sumOfRatings += $data['average']; // Sum of average ratings
        }

        $numberOfPlatforms = count($ratings); // Number of platforms
        $averageRatingAcrossPlatforms = $numberOfPlatforms ? ($sumOfRatings / $numberOfPlatforms) : 0;

        return [
            'totalReviews' => $totalReviews,
            'averageRating' => round($averageRatingAcrossPlatforms, 2)
        ];
    }

    $platformRatings = [
        'Google' => ['total' => 1005, 'average' => 5],
        'TripAdvisor' => ['total' => 513, 'average' => 5],
        'Yelp' => ['total' => 164, 'average' => 4.8],
        'Facebook' => ['total' => 145, 'average' => 4.9],
        'Groupon' => ['total' => 1035, 'average' => 4.9],
    ];

    // Calculate the total number of reviews and the average rating across platforms
    $results = calculateTotalReviewsAndAverageRating($platformRatings);

    /* Training Wheels  - this is what's used as the echo output on actual pages
    Total number of reviews = $results['totalReviews'];
    Average rating = $results['averageRating'];
    */
    ?>