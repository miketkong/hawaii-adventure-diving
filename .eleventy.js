const fs = require('fs');
const path = require('path');
const crypto = require('crypto');

module.exports = function (eleventyConfig) {

  eleventyConfig.addShortcode("cssVersion", function (filePath) {
    try {
      const content = fs.readFileSync(path.join(__dirname, filePath));
      return crypto.createHash('md5').update(content).digest('hex').slice(0, 8);
    } catch (e) {
      return Date.now();
    }
  });

  eleventyConfig.addFilter("commaNumber", value => Number(value).toLocaleString());
  eleventyConfig.addFilter("oneDecimal", value => Number(value).toFixed(1));

  const skipDSStore = { filter: (filePath) => path.basename(filePath) !== ".DS_Store" };

  eleventyConfig.addPassthroughCopy("articles/images", skipDSStore);
  eleventyConfig.addPassthroughCopy("assets", skipDSStore);
  eleventyConfig.addPassthroughCopy("images", skipDSStore);
  eleventyConfig.addPassthroughCopy("shark-diving-tours/hawaii/oahu/oahu-shark-diving-tour-photos/from-insta-2023", skipDSStore);
  eleventyConfig.addPassthroughCopy("snorkel-tour/images", skipDSStore);
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
