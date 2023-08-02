import { render, screen } from '@testing-library/react';
import Home from './Home';

describe('Kiem tra component Home', () => {
    it('renders Home component', () => {
        render(<Home />);
        // screen.debug();
        screen.getByText('Hello');
    });
})
