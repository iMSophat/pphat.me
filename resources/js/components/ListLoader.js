function ListLoader(col) {
    return (
        <tr>
            <td className="text-center" colSpan={col.col}>
                Loading...
            </td>
        </tr>
    );
}

export default ListLoader;