import { SpinnerCircular } from 'spinners-react';

function ListLoader(col) {
    return (
        <tr>
            <td className="text-center p-5" colSpan={col.col}>
                <div className='flex w-full items-center gap-2 justify-center'>
                    <SpinnerCircular size={20} thickness={125} speed={171} color="rgba(212, 41, 50, 1)" secondaryColor="rgba(31, 168, 224, 1)" />
                    <p className='animate-pulse'>Loading . . . </p>
                </div>
            </td>
        </tr>
    );
}

export default ListLoader;