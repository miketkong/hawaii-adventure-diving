const fs = require('fs');
const path = require('path');
const crypto = require('crypto');

module.exports = function (eleventyConfig) {

  eleventyConfig.addShortcode("cssVersion", function(filePath) {
    try {
      const content = fs.readFileSync(path.join(__dirname, filePath));
      return crypto.createHash('md5').update(content).digest('hex').slice(0, 8);
    } catch(e) {
      return Date.now();
    }
  });

  eleventyConfig.addFilter("commaNumber", value => Number(value).toLocaleString());
  eleventyConfig.addFilter("oneDecimal", value => Number(value).toFixed(1));

  eleventyConfig.addPassthroughCopy("articles");
  eleventyConfig.addPassthroughCopy("assets");
  eleventyConfig.addPassthroughCopy("assets/video");
  eleventyConfig.addPassthroughCopy("assets/fonts");
  eleventyConfig.addPassthroughCopy("images");
  eleventyConfig.addPassthroughCopy("shark-diving-oahu");
  eleventyConfig.addPassthroughCopy("shark-diving-tours");
  eleventyConfig.addPassthroughCopy("snorkel-tour");
  eleventyConfig.addPassthroughCopy("whale-watching-tour");
  eleventyConfig.addPassthroughCopy("robots.txt");
  eleventyConfig.addPassthroughCopy("_redirects");
  eleventyConfig.addPassthroughCopy("dev"); // dev assets (placeholder images etc.)

  return {
    dir: {
      input: ".",
      includes: "_includes",
      data: "_data",
      output: "_site",
    },
  };
};
