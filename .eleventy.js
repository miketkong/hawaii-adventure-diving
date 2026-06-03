const fs = require('fs');
const path = require('path');

module.exports = function (eleventyConfig) {

  eleventyConfig.addShortcode("cssVersion", function(filePath) {
    try {
      const stats = fs.statSync(path.join(__dirname, filePath));
      return Math.floor(stats.mtimeMs);
    } catch(e) {
      return Date.now();
    }
  });

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

  return {
    dir: {
      input: ".",
      includes: "_includes",
      data: "_data",
      output: "_site",
    },
  };
};
