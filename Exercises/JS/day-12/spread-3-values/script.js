const spread3 = (a, b, c) => {
  if (a > b) {
    if (b > c) {
      return a - c;
    } else if (c > a) {
      return b - c;
    }
    return a - b;
  }

  if (c > b) {
    return c - a;
  } else if (c > a) {
    return b - a;
  }

  return b - c;
};
