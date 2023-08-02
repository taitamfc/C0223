import { render, screen, fireEvent  } from '@testing-library/react';
import Calculator, { getSum } from './Calculator';


describe('Kiem tra component Calculator', () => {
    it('renders Calculator component', () => {
        // render(<Calculator />);
        // // screen.debug();
        // screen.getByText('Hello');
    });
    it('test function getSum', () => {
        let expected = 2;
        let output = getSum(1,1);
        expect(expected).toBe(output);
    });
})

describe('Test các component có id sau có được render không', () => {
    it('test render id value-one-input', () => {
        const { getByTestId  } = render(<Calculator />);
        const element = getByTestId ('value-one-input');
        expect(element).toBeInTheDocument();
    });

    it('test render id value-two-input', () => {
        const { getByTestId  } = render(<Calculator />);
        const element = getByTestId ('value-two-input');
        expect(element).toBeInTheDocument();
    });
})
describe('Test component có hiển thị kết quả tính tổng đúng hay không', () => {
    it('Test component có hiển thị kết quả tính tổng đúng hay không', () => {
        const { getByTestId  } = render(<Calculator />);
        // Tim button co data-testid: button-add
        const button = getByTestId('button-add');

        // Tim button co data-testid: result
        const result = getByTestId('result');

        //Sử dụng fireEvent.change để gán giá trị cho hai input lần lượt là 1 và 2
        fireEvent.change(screen.getByTestId('value-one-input'), {
            target: { value: 1 },
        });

        fireEvent.change(screen.getByTestId('value-two-input'), {
            target: { value: 2 },
        });

        // Sử dụng fireEvent để mock sự kiện onClick button “add”.
        fireEvent.click(button);

        //So sánh giá trị hiển thị ở component với “Result: 3”
        let expected = 'Result: 3';
        let output = result.textContent //lay noi dung ben trong
        expect(expected).toBe(output);
    });
})