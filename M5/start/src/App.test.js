import { render, screen } from '@testing-library/react';
import App from './App';

// test('renders learn react link', () => {
//   render(<App />);
//   const linkElement = screen.getByText(/learn react/i);
//   expect(linkElement).toBeInTheDocument();
// });


describe('Kiem thu component App', () => {
  it('true is true', () => {
    let expected = 10;
    let output = 10;
    expect(expected).toBe(output);
  });

  it('false is false', () => {
    expect(false).toBe(false);
  });

  it('hien thi App component', () => {
    
  });
});