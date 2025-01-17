function foo(a, b) {
  if (a === null || b === null) {
    return null; // This line is problematic
  }

  // ... rest of the function
}