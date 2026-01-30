module.exports = function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("articles");
  eleventyConfig.addPassthroughCopy("assets");
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
