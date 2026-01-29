const platformRatings = {
  Google: { total: 1005, average: 5 },
  TripAdvisor: { total: 513, average: 5 },
  Yelp: { total: 164, average: 4.8 },
  Facebook: { total: 145, average: 4.9 },
  Groupon: { total: 1035, average: 4.9 },
};

const calculateReviewSummary = (ratings) => {
  const entries = Object.values(ratings);
  const totalReviews = entries.reduce((sum, { total }) => sum + total, 0);
  const sumOfRatings = entries.reduce((sum, { average }) => sum + average, 0);
  const averageRating =
    entries.length === 0 ? 0 : Number((sumOfRatings / entries.length).toFixed(2));

  return {
    totalReviews,
    averageRating,
  };
};

module.exports = {
  contact: {
    phonePretty: "+1 (808) 829-2203",
    phoneLink: "+18088292203",
    contactEmail: "nickloewenstine@gmail.com",
  },
  platformRatings,
  reviewSummary: calculateReviewSummary(platformRatings),
};
